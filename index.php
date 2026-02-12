<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Client Requirement Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { background: #ade6d8; }

    .form-card {
      max-width: 900px;
      margin: 40px auto;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .section-title {
      background: #0d6efd;
      color: white;
      padding: 10px 15px;
      border-radius: 10px;
      margin-bottom: 15px;
      font-weight: 600;
    }

    .submit-btn {
      border-radius: 30px;
      padding: 10px 30px;
      font-size: 18px;
    }
  </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "client_form";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $business = $_POST['business'];
  $services = $_POST['services'];
  $audience = $_POST['audience'];
  $goal = $_POST['goal'];
  $logo = $_POST['logo'];
  $color_theme = $_POST['color_theme'];
  $example_sites = $_POST['example_sites'];
  $responsive = $_POST['responsive'];
  $pages = $_POST['pages'];
  $budget = $_POST['budget'];
  $deadline = $_POST['deadline'];

  $sql = "INSERT INTO requirements 
  (business, services, audience, goal, logo, color_theme, example_sites, responsive, pages, budget, deadline)
  VALUES 
  ('$business', '$services', '$audience', '$goal', '$logo', '$color_theme', '$example_sites', '$responsive', '$pages', '$budget', '$deadline')";

  if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success text-center'>Data saved successfully!</div>";
  } else {
    echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
  }
}
?>

<div class="card form-card p-4">
  <h2 class="text-center mb-4">Website Client Requirement Form</h2>

  <form method="POST">

    <div class="section-title">1. Basic Business Information</div>

    <div class="mb-3">
      <label class="form-label">Business Name</label>
      <input type="text" name="business" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Services / Products</label>
      <textarea name="services" class="form-control" rows="2" required></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Target Audience</label>
      <input type="text" name="audience" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Website Goal</label>
      <select name="goal" class="form-select">
        <option>Information</option>
        <option>Sales</option>
        <option>Booking</option>
        <option>Education</option>
        <option>Portfolio</option>
      </select>
    </div>

    <div class="section-title">2. Design Requirements</div>

    <div class="mb-3">
      <label class="form-label">Do you have a logo?</label>
      <select name="logo" class="form-select">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Preferred Color Theme / Brand Style</label>
      <input type="text" name="color_theme" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Example Websites You Like</label>
      <textarea name="example_sites" class="form-control" rows="2"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Mobile Friendly (Responsive) Required?</label>
      <select name="responsive" class="form-select">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </div>

    <div class="section-title">3.Website Details</div>

    <div class="mb-3">
      <label class="form-label">Number of Pages</label>
      <input type="number" name="pages" class="form-control" min="1">
    </div>

    <div class="mb-3">
      <label class="form-label">Which pages do you want?</label>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="page_list[]" value="Home"> Home
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="page_list[]" value="About"> About
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="page_list[]" value="Services"> Services
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="page_list[]" value="Gallery"> Gallery
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="page_list[]" value="Contact"> Contact
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="page_list[]" value="Blog"> Blog
      </div>

      <input type="text" name="custom_pages" class="form-control mt-3" placeholder="Other pages (type here if not listed)">
    </div>

    <div class="section-title">4. Features Needed</div>

    <div class="mb-3">
      <label class="form-label">Contact Form Needed?</label>
      <div>
        <input type="radio" name="contact_form" value="Yes"> Yes
        <input type="radio" name="contact_form" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">WhatsApp Chat Required?</label>
      <div>
        <input type="radio" name="whatsapp" value="Yes"> Yes
        <input type="radio" name="whatsapp" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Online Payment Needed?</label>
      <div>
        <input type="radio" name="payment" value="Yes"> Yes
        <input type="radio" name="payment" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Admin Panel Required?</label>
      <div>
        <input type="radio" name="admin_panel" value="Yes"> Yes
        <input type="radio" name="admin_panel" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Login / Register System Needed?</label>
      <div>
        <input type="radio" name="login_system" value="Yes"> Yes
        <input type="radio" name="login_system" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Image Gallery / Video Required?</label>
      <div>
        <input type="radio" name="gallery" value="Yes"> Yes
        <input type="radio" name="gallery" value="No" class="ms-3"> No
      </div>
    </div>



    <div class="section-title">5. Content & Media</div>

    <div class="mb-3">
      <label class="form-label">Who will provide Text Content?</label>
      <div>
        <input type="radio" name="text_content" value="Client"> Client
        <input type="radio" name="text_content" value="Developer" class="ms-3"> Developer
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Who will provide Images?</label>
      <div>
        <input type="radio" name="images" value="Client"> Client
        <input type="radio" name="images" value="Developer" class="ms-3"> Developer
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Who will provide Videos?</label>
      <div>
        <input type="radio" name="videos" value="Client"> Client
        <input type="radio" name="videos" value="Developer" class="ms-3"> Developer
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Need Content Writing Service?</label>
      <div>
        <input type="radio" name="content_writing" value="Yes"> Yes
        <input type="radio" name="content_writing" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="section-title">6. Domain & Hosting</div>

    <div class="mb-3">
      <label class="form-label">Do you already have a Domain Name?</label>
      <div>
        <input type="radio" name="domain" value="Yes"> Yes
        <input type="radio" name="domain" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Do you already have Hosting?</label>
      <div>
        <input type="radio" name="hosting" value="Yes"> Yes
        <input type="radio" name="hosting" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Need help purchasing Domain/Hosting?</label>
      <div>
        <input type="radio" name="purchase_help" value="Yes"> Yes
        <input type="radio" name="purchase_help" value="No" class="ms-3"> No
      </div>
    </div>

    <div class="section-title">7. Budget & Timeline</div>

    <div class="mb-3">
      <label class="form-label">Budget (₹)</label>
      <input type="number" name="budget" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Deadline</label>
      <input type="date" name="deadline" class="form-control">
    </div>

    <div class="section-title">8. Maintenance & Support</div>

    <div class="mb-3">
      <label class="form-label">Who will update products/content?</label>
      <div>
        <input type="radio" name="update_by" value="Client"> Client
        <input type="radio" name="update_by" value="Developer" class="ms-3"> Developer
      </div>
    </div>

    

    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary submit-btn">Submit Requirement</button>
    </div>

  </form>
</div>

</body>
</html>
