page1:

session_start();

$_SESSION['redirected'] = true;

header('Location: ./addClub.php?clubID=' . $clubID . 'success');

page2:
session_start();
if (isset($_SESSION['redirected']) && $_SESSION['redirected'] === true) {
    $successMessage = "Club deleted successfully";
    unset($_SESSION['redirected']);
}