@extends("layout")

@section("body")

  <main role="main" class="inner cover">
      
      <h1 class="cover-heading">Add Person</h1>
      <form action="{{route('form.save')}}" method="POST">

            <div class="form-group">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">Add Person</button>
      </form>
  </main>
@endsection