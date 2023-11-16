<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>index</th>
        <th>Name</th>
        <th>Title</th>
        <th>Content</th>
        <th>Active</th>
        <th>Urgent</th>
        <th>Creat time</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($news as $n)

        <tr>
          <td>{{($news->currentPage() - 1) * $news->perPage() + $loop->iteration }}</td>
          <td>{{ $n->author }}</td>
          <td>{{ $n->title }}</td>
          <td>{{ $n->content }}</td>
          <td>{{ $n->active }}</td>
          <td>{{ $n->urgent }}</td>
          <td>{{ $n->created_at }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
{{ $news->links('pagination::bootstrap-4') }}
</div>
</body>
</html>
