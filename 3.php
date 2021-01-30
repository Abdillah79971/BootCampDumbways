<h1>Menampilkan semua data pada tabel school</h1>
<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'db_pendidikan';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM user';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['email'].'</td>
			<td class="right">'.$row['password'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

mysqli_free_result($query);


mysqli_close($conn);
?>
<br>
<br>
<h1>Menampilkan data 1 school dengan user yang membuat data tersebut</h1>
<?php
$host = "localhost";
$name = "root";
$pass = "";
$db_name = "db_pendidikan";

$conn = mysqli_connect($host,$name,$pass,$db_name);

if(!$conn)
{
    die("Gagqal terkoneksi");
}

$query = mysqli_query($conn, "SELECT * FROM user INNER JOIN school_tb ON user.id = school_tb.id");

echo '<table border="1">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>NPSN</th>
<th>Nama Sekolah</th>
<th>Alamat</th>
<th>Logo Sekolah</th>
<th>Level Sekolah</th>
<th>Status Sekolah</th>
<th>Id User</th>';

while($row = mysqli_fetch_array($query))
{
    echo '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['password'].'</td>
    <td>'.$row['NPSN'].'</td>
    <td>'.$row['name_school'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['logo_school'].'</td>
    <td>'.$row['school_level'].'</td>
    <td>'.$row['status_school'].'</td>
    <td>'.$row['user_id'].'</td>
    </tr>';
}

echo '
</tbody>
</table>';

mysqli_free_result($query);
mysqli_close($conn);
?>
<br>
<br>
<h1>Mengedit 1 data school</h1>
<?php
$host = "localhost";
$name = "root";
$pass = "";
$db_name = "db_pendidikan";

$conn = mysqli_connect($host,$name,$pass,$db_name);

if(!$conn)
{
    die("Gagqal terkoneksi");
}

$query = mysqli_query($conn, "SELECT id, name_school FROM school_tb");

echo '<table border="1">
<thead>
<tr>
<th>Id</th>
<th>Name</th>';


while($row = mysqli_fetch_array($query))
{
    echo '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['name_school'].'</td>
    </tr>';
}

echo '
</tbody>
</table>';

mysqli_free_result($query);
mysqli_close($conn);
?>
<br>
<br>
<h1>Menampilkan seluruh data sekolah berdasarkan status</h1>
<?php
$host = "localhost";
$name = "root";
$pass = "";
$db_name = "db_pendidikan";

$conn = mysqli_connect($host,$name,$pass,$db_name);

if(!$conn)
{
    die("Gagqal terkoneksi");
}

$query = mysqli_query($conn, "SELECT * FROM school_tb ORDER BY status_school DESC");

echo '<table border="1">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>NPSN</th>
<th>Nama Sekolah</th>
<th>Alamat</th>
<th>Logo Sekolah</th>
<th>Level Sekolah</th>
<th>Status Sekolah</th>
<th>Id User</th>';


while($row = mysqli_fetch_array($query))
{
    echo '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['NPSN'].'</td>
    <td>'.$row['name_school'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['logo_school'].'</td>
    <td>'.$row['school_level'].'</td>
    <td>'.$row['status_school'].'</td>
    <td>'.$row['user_id'].'</td>
    </tr>';
}

echo '
</tbody>
</table>';

mysqli_free_result($query);
mysqli_close($conn);
?>