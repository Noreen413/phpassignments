<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Registration Form</h2>
    <?php
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function sanitize_input($data) {
            return htmlspecialchars(trim($data));
        }

        $first_name = sanitize_input($_POST['first_name'] ?? '');
        $last_name = sanitize_input($_POST['last_name'] ?? '');
        $email = sanitize_input($_POST['email'] ?? '');
        $gender = sanitize_input($_POST['gender'] ?? '');
        $role = sanitize_input($_POST['role'] ?? '');
        $username = sanitize_input($_POST['username'] ?? '');
        $password = sanitize_input($_POST['password'] ?? '');

        if (empty($first_name)) {
            $errors['first_name'] = 'First Name is required';
        }
        if (empty($last_name)) {
            $errors['last_name'] = 'Last Name is required';
        }
        if (empty($email)) {
            $errors['email'] = 'Email is required';
        }
        if (empty($gender)) {
            $errors['gender'] = 'Gender is required';
        }
        if (empty($role)) {
            $errors['role'] = 'Role is required';
        }
        if (empty($username)) {
            $errors['username'] = 'Username is required';
        }
        if (empty($password)) {
            $errors['password'] = 'Password is required';
        }
    }
    ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" value="<?php echo htmlspecialchars($_POST['first_name'] ?? ''); ?>">
            <?php if (!empty($errors['first_name'])): ?>
                <div class="text-danger"><?php echo $errors['first_name']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" value="<?php echo htmlspecialchars($_POST['last_name'] ?? ''); ?>">
            <?php if (!empty($errors['last_name'])): ?>
                <div class="text-danger"><?php echo $errors['last_name']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            <?php if (!empty($errors['email'])): ?>
                <div class="text-danger"><?php echo $errors['email']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label><br>
            <input type="checkbox" id="male" name="gender" value="Male" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'Male') ? 'checked' : ''; ?>>
            <label for="male">Male</label><br>
            <input type="checkbox" id="female" name="gender" value="Female" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'Female') ? 'checked' : ''; ?>>
            <label for="female">Female</label> 
            <?php if (!empty($errors['gender'])): ?>
                <div class="text-danger"><?php echo $errors['gender']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role">
                <option value="">Select a role</option>
                <option value="Admin" <?php echo (isset($_POST['role']) && $_POST['role'] === 'Admin') ? 'selected' : ''; ?>>Admin</option>
                <option value="Student" <?php echo (isset($_POST['role']) && $_POST['role'] === 'Student') ? 'selected' : ''; ?>>Student</option>
                <option value="Teacher" <?php echo (isset($_POST['role']) && $_POST['role'] === 'Teacher') ? 'selected' : ''; ?>>Teacher</option>
            </select>
            <?php if (!empty($errors['role'])): ?>
                <div class="text-danger"><?php echo $errors['role']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
            <?php if (!empty($errors['username'])): ?>
                <div class="text-danger"><?php echo $errors['username']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <?php if (!empty($errors['password'])): ?>
                <div class="text-danger"><?php echo $errors['password']; ?></div>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="mt-5">
        <h3>Form Data</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)) {
                    $fields = [
                        'First Name' => $first_name,
                        'Last Name' => $last_name,
                        'Email' => $email,
                        'Gender' => $gender ?: 'Not Selected',
                        'Role' => $role,
                        'Username' => $username,
                        'Password' => '********' // Don't display actual password
                    ];

                    foreach ($fields as $field => $value) {
                        echo "<tr><td>$field</td><td>$value</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
