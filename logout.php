<?php
session_start();
session_destroy();
?>
<script>
      alert('Anda Berhasil Logout');
      window.location.href='http://localhost/mywebsite1-main/index.php?';
</script>

<!-- header("location:http://localhost/mywebsite1-main/index.php?"); -->
