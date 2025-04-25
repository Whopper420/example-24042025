<form action="/index" method="post">
    @csrf
    <input type="text" name="title">
    <input type="text" name="content">
    <button>Create</button>
</form>