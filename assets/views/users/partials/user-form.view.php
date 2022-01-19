<input type="text" name="first_name" placeholder="First name" value="<?= isset($user) ? $user['first_name'] : '' ?>"><br />
<input type="text" name="last_name" placeholder="Last name" value="<?= isset($user) ? $user['last_name'] : '' ?>"><br />
<input type="email" name="email" placeholder="Email address" value="<?= isset($user) ? $user['email'] : '' ?>"><br />
<input type="password" name="password" placeholder="Password">
<input type="submit" value="Save">