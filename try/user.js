function setUpdateAction() {
document.frmUser.action = "editArtists.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "deleteArtists.php";
document.frmUser.submit();
}
}