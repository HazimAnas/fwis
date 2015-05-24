    <nav id="navigation">
      <div class="wrapper">
        <span>Welcome, <?php echo $_SESSION['FIRST_NAME']." ".$_SESSION['LAST_NAME']; ?> </span>
        <a href="logout-action.php">Logout</a>
        <a href="summary.php">Summary</a>
        <a href="insert-form.php">Create</a>
        <a href="list.php">Listing</a>
        <a href="home.php">Home</a>
      </div>
    </nav>