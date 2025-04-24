<!DOCTYPE html>
<html>
<head>
    <title>Category Form</title>
</head>
<body>
    <h1>Submit Name & Email</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="datasubmit">
        @csrf
        <div>
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
