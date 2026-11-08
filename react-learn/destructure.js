const user = {
  id: 101,
  username: "alex_dev",
  role: "admin",
  profile: {
    email: "alex@example.com"
  }
};

// Destructuring with renaming and nested extraction
const { username, role, profile: { email } } = user;

console.log(username); // "alex_dev"
console.log(email);    // "alex@example.com"
