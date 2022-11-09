class Document{
    public $authors;
    public $date;

    public function setAuthors($authors){
        $this->authors = $authors;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getDate(){
        return $this->date;
    }
}

$document01 = new Document();
$document01->setAuthors("Author: Arhab");
$document01->setDate("Tanggal Rilis: 2016-07-11");

echo $document01->getAuthors();   
echo "<br>";
echo $document01->getDate(); 
echo "<br>";



class Book extends Document{
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function setAuthor($date){
        $this->date = $date;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getTitle(){
        return $this->title;
    }
}

$book01 = new Book ();
$book01->setTitle("Judul: Haikyuu!");

echo $book01->getTitle();   
echo "<br>";
echo $book01->getAuthors(); 


class Email extends Document{
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function setAuthor($authors){
        $this->authors = $authors;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getSubject(){
        return $this->subject;
    }
}

$email01 = new Email ();
$email01->setSubject("Menceritakan: Perjalanan Ini...Terasa Sangad Menyedihkan");

echo $email01->getSubject();   
echo "<br>";
echo $email01->getAuthors(); 
echo "<br>";
