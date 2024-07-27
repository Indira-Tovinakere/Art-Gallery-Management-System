function setUpdateAction() {
document.frmUser.action = "EditArtworks.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "deleteArtworks.php";
document.frmUser.submit();
}
}