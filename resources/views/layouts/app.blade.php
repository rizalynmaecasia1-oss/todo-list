<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To-Do List</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #ffffff;
            color: #17213b;
        }

        .header {
            height: 80px;
            background: #6672c9;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
        }

        .student {
            font-size: 16px;
        }

        .container {
            display: flex;
            min-height: calc(100vh - 80px);
        }

        .sidebar {
            width: 270px;
            background: #f4f6ff;
            padding: 25px 15px;
        }

        .sidebar a {
            display: block;
            padding: 17px;
            margin-bottom: 8px;
            text-decoration: none;
            color: #37415c;
            border-radius: 10px;
        }

        .sidebar a:hover {
            background: #e3e6fb;
            color: #5866c5;
        }

        .content {
            flex: 1;
            padding: 35px;
        }

        .content h1 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #6d7488;
            margin-bottom: 30px;
        }

        .add-box {
            background: #f3f5ff;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .add-box h2 {
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        input, select {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
        }

        .task-input {
            flex: 1;
        }

        button {
            border: none;
            border-radius: 8px;
            padding: 14px 22px;
            cursor: pointer;
            font-size: 15px;
        }

        .add-button {
            background: #6672c9;
            color: white;
        }

        .add-button:hover {
            background: #505db5;
        }

        .message {
            background: #dff5e5;
            color: #23834a;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .table-box {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f2f4fc;
            text-align: left;
            padding: 17px;
        }

        td {
            padding: 17px;
            border-bottom: 1px solid #eee;
        }

        .category {
            padding: 7px 13px;
            border-radius: 20px;
            background: #e5f2ff;
            color: #2876c7;
        }

        .daily {
            background: #f0e4ff;
            color: #8a42c5;
        }

        .pending {
            background: #fff1c9;
            color: #aa7700;
            padding: 7px 13px;
            border-radius: 20px;
        }

        .completed {
            background: #dff6e5;
            color: #218448;
            padding: 7px 13px;
            border-radius: 20px;
        }

        .actions {
            display: flex;
            gap: 7px;
        }

        .edit {
            background: #6672c9;
            color: white;
        }

        .delete {
            background: #ef5265;
            color: white;
        }

        .check {
            background: transparent;
            padding: 0;
            font-size: 20px;
        }

        .done {
            text-decoration: line-through;
            color: #777;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            color: #777;
        }

        @media(max-width: 900px) {
            .sidebar {
                width: 180px;
            }

            .form-row {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<header class="header">
    <div class="logo">☑ To-Do List</div>
    <div class="student">👤 Student Mode</div>
</header>

<div class="container">

    <aside class="sidebar">

        <a href="{{ route('tasks.index') }}">
            🏠 Home
        </a>

        <a href="{{ route('tasks.index') }}">
            📅 My Tasks
        </a>

        <a href="{{ route('tasks.index') }}">
            🎓 School Tasks
        </a>

        <a href="{{ route('tasks.index') }}">
            ☀ Daily Tasks
        </a>

    </aside>

    <main class="content">

        @yield('content')

    </main>

</div>

</body>
</html>