<x-header>
</x-header>

<x-nav>
</x-nav>

<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Form Basic</h4>
            <div class="ms-auto text-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Library
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-0">Static Table With Checkboxes</h5>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                            
                            <th scope="col">Name </th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody class="customtable">
                            @foreach ($categories as $category)
                                
                            <tr>
                                
                                <td>{{$category->name}}</td>
                                <td>{{$category->desc}}</td>
                                <td><a href="{{route('category.edit',$category->id)}}">Edit</a></td>
                                <td>
                                
                                  <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                  </form>
                            </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
        </div>

</div>


<x-footer>
</x-footer>