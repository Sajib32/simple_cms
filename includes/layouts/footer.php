<div id="footer">Copyright <?php echo date("Y"); ?> , Inspire Corp</div>
	</body>
</html>
<?php
	// Close database connection
if (isset($connection)){
	mysqli_close($connection);
}
?>