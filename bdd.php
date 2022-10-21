<?

class DBConnection extends PDO
{
  private $host = 'localhost:8889';
  private $dbname = 'cookme';
  private $username = 'root';
  private $password = 'root';
  public function __construct()
  {
    parent::__construct("mysql:host=$this->host ; dbname=$this->dbname; charset=utf8", $this->username,  $this->password);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }
}

function addusers()
{
  $conn = new DBConnection();
  $firstname = 'Jack';
  $lastname = 'Doe';
  $email = 'jack@mail.com';
  $imageUrl = ' ';
  $password = 'Jack';
  $sexe = 'h';
  $birthdate = '2000-10-01';

  $req =  $conn->prepare(<<<SQL
  INSERT INTO users( firstname,lastname,email,password,imageUrl,sexe,birthdate) 
   VALUES (:firstname, :lastname, :email, :password, :imageUrl, :sexe, :birthdate)
SQL);

  $req->bindParam(':firstname', $firstname);
  $req->bindParam(':lastname', $lastname);
  $req->bindParam(':email', $email);
  $req->bindParam(':password', $password);
  $req->bindParam(':imageUrl', $imageUrl);
  $req->bindParam(':sexe', $sexe);
  $req->bindParam(':birthdate', $birthdate);
  $req->execute();

  return $req->fetchAll();
}

function fetchAllRecipes(string $order, int $limit = 25)
{
  $conn = new DBConnection();
  // Validate the $order variable to avoid SQL injection
  $allowedColumns = ['id', 'price', 'title', 'difficulty', 'likes']; // Replace with the actual column names allowed for sorting
  if (!in_array($order, $allowedColumns)) {
    throw new Exception('Invalid column for sorting.');
  }

  // Sanitize the $limit variable to avoid SQL injection
  $limit = max(1, min($limit, 100)); // Limit the range to 1-100 (or any suitable range)

  $sql = "SELECT * FROM recipies ORDER BY $order ASC LIMIT $limit";
  $request = $conn->prepare($sql);
  $request->execute();
  $recipes = $request->fetchAll(PDO::FETCH_ASSOC);

  return $recipes;
}

function fetchOneRecipeById(int $id)
{
  $conn = new DBConnection();
  $sql = "SELECT * FROM recipies WHERE id = :id";
  $request = $conn->prepare($sql);
  $request->bindParam(':id', $id);
  $request->execute();
  $recipes = $request->fetch(PDO::FETCH_ASSOC);

  return $recipes;
}


function addRecipe()
{

  $title = $_POST['title'];
  $description = $_POST['description'];
  $imageUrl = $_POST['imageUrl'];
  $difficulty = $_POST['difficulty'];
  $price = $_POST['price'];
  $likes = 0;
  $active = 0;
  $author = $_POST['email'];
  $conn = new DBConnection();
  $req =  $conn->prepare(<<<SQL
  INSERT INTO recipies( title,description,image,difficulty,price,likes,active,author) 
   VALUES ( :title,:description,:image,:difficulty,:price,:likes,:active,:author) 
SQL);

  $req->bindParam(':title', $title);
  $req->bindParam(':description', $description);
  $req->bindParam(':image', $imageUrl);
  $req->bindParam(':difficulty', $difficulty);
  $req->bindParam(':price', $price);
  $req->bindParam(':likes', $likes);
  $req->bindParam(':active', $active);
  $req->bindParam(':author', $author);
  $req->execute();

  return  $conn->lastInsertId();;
}
