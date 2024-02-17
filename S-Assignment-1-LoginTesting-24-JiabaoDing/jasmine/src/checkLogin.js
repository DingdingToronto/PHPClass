function checkLogin(username, password) {
  if (username.trim() === "") {
    return "No username entered.";
  }
  if (password.trim() === "") {
    return "No password entered.";
  }
  const encryptedUsername = md5Encrypt("theCorrectUsername");
  const encryptedPassword = md5Encrypt("theCorrectPassword");

  const encryptedInputUsername = md5Encrypt(username);
  const encryptedInputPassword = md5Encrypt(password);

  if (
    encryptedInputPassword === encryptedPassword &&
    encryptedInputUsername === encryptedUsername
  ) {
    return true;
  } else {
    return false;
  }
}
