<?php 
$url = 'http://localhost/profile_me';
// Koneksi ke database
$host = "localhost";  // Ganti sesuai pengaturan server
$user = "root";  // Ganti sesuai pengaturan MySQL
$password = "";  // Ganti sesuai password MySQL
$dbname = "profile_management";  // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Getting data web
$web_data = [];
$sql = "SELECT * FROM web";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $web_data = $row;
}


$skills_data = explode(',',$web_data['skills']);
$language_data = explode(',',$web_data['language']);
$skills = [];
$language = [];

$bucket_skills = [];
foreach($skills_data as $s){
	$bucket_skills[] = $s;
	if(count($bucket_skills) === 3){
		$skills[] = $bucket_skills;
		$bucket_skills = [];
	}
}
if(count($bucket_skills) > 0)
	$skills[] = $bucket_skills;

$bucket_language = [];
foreach($language_data as $s){
	$bucket_language[] = $s;
	if(count($bucket_language) === 3){
		$language[] = $bucket_language;
		$bucket_language = [];
	}
}
if(count($bucket_language) > 0)
	$language[] = $bucket_language;

// Getting data resume
$experience_data = [];
$sql = "SELECT * FROM experience";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $experience_data[] = $row;
  }
}

// Getting data educations
$education_data = [];
$sql = "SELECT * FROM education";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $education_data[] = $row;
  }
}

// Getting data educations
$projects_data = [];
$sql = "SELECT * FROM projects";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $projects_data[] = $row;
  }
}

// Getting data educations
$certificate_data = [];
$sql = "SELECT * FROM sertifikasi";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $certificate_data[] = $row;
  }
}

// echo json_encode([$experience_data]);

?>