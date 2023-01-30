<?php require_once 'partial/header.php'; 
require_once 'class/User.php'; 
$userIns = new User();

$user = $userIns->getUser($_SESSION['username']);
if(isset($_POST['delete'])){
    $userIns->delete($user->id);
}
?>

	<main>
        <tr>
            <td><?= $user->username; ?></td>
            <form method="post">
                <input type="submit" name="delete" value="delete user">
            </form>
        </tr>
	</main>

<?php require_once 'partial/footer.php'; ?>