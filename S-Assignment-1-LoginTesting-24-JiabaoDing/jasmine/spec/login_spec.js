describe("Login functionality", function () {
  it("should return 'No username entered.' if username is empty", function () {
    expect(checkLogin("", "password")).toEqual("No username entered.");
  });

  it("should return 'No password entered.' if password is empty", function () {
    expect(checkLogin("username", "")).toEqual("No password entered.");
  });

  it("should return false if username is incorrect", function () {
    expect(checkLogin("incorrectUsername", "theCorrectPassword")).toBeFalsy();
  });

  it("should return false if password is incorrect", function () {
    expect(checkLogin("theCorrectUsername", "incorrectPassword")).toBeFalsy();
  });

  it("should return true if username and password are correct", function () {
    expect(checkLogin("theCorrectUsername", "theCorrectPassword")).toBeTruthy();
  });
});

describe("MD5 encryption", function () {
  it("should encrypt the string using MD5", function () {
    expect(md5Encrypt("theCorrectPassword")).toMatch(/^[0-9a-fA-F]{32}$/);
  });
});
