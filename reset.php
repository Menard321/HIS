<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
      <h2 class="text-2xl font-bold text-center text-gray-700">
        Reset Password
      </h2>
      <form action="#" method="POST" class="mt-4">
        <div>
          <label class="block text-sm font-medium text-gray-600"
            >Current password</label
          >
          <input
            type="password"
            name="password"
            class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
            required
          />
          <label class="block text-sm font-medium text-gray-600"
            >New password</label
          >
          <input
            type="password"
            name="password"
            class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
            required
          />
          <label class="block text-sm font-medium text-gray-600"
            >Confirm new password</label
          >
          <input
            type="password"
            name="password"
            class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
            required
          />
        </div>
        <button
          type="submit"
          class="w-full px-4 py-2 mt-6 text-white bg-red-500 rounded-lg hover:bg-red-600"
        >
          Reset Password
        </button>
      </form>
      <p class="mt-4 text-sm text-center text-gray-600">
        Remember your password?
        <a href="index.html" class="text-blue-500">Login</a>
      </p>
    </div>
  </body>
</html>
