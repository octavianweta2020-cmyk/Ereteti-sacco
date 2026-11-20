<?php
$page_title = 'Apply for membership';
include 'includes/header.php';
?>

<main>
  <section>
    <h2>Apply to join</h2>
    <p>New members should bring a national ID and a bank account. Once approved, your membership number is issued and you may deliver from the day it is issued.</p>
  </section>

  <section>
    <h2>Membership form</h2>
    <form action="process-register.php" method="post">
      <p>
        <label for="first-name">First name</label><br>
        <input id="first-name" name="first_name" type="text" required>
      </p>
      <p>
        <label for="last-name">Last name</label><br>
        <input id="last-name" name="last_name" type="text" required>
      </p>
      <p>
        <label for="phone">Phone number</label><br>
        <input id="phone" name="phone" type="tel" required>
      </p>
      <p>
        <label for="route">Preferred route</label><br>
        <select id="route" name="route">
          <option value="">Choose a route</option>
          <option value="1">Kiserian</option>
          <option value="2">Ngong</option>
          <option value="3">Rongai</option>
        </select>
      </p>
      <p>
        <button type="submit">Submit application</button>
      </p>
    </form>
  </section>
</main>

<?php include 'includes/footer.php'; ?>