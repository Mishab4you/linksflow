<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
 if(isset($_SESSION['message']))
{ 
?>
<script>
		swal({
  title: "<?php echo $_SESSION['message']; ?>!",
  text: "Weclome <?php echo $_SESSION['username']; ?>",
  icon: "<?php echo $_SESSION['type']; ?>",
});
	</script>
    <?php
      unset($_SESSION['message']);
      unset($_SESSION['type']);
 }
?>








