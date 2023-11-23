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
            <div class="col-md-6">
                <div class="card">
                    <form action="{{route('category.store')}}" method="POST" class="form-horizontal">
                        @csrf
                      <div class="card-body">
                        <h4 class="card-title">Category Add</h4>
                        <div class="form-group row">
                          <label
                            for="fname"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Name</label
                          >
                          <div class="col-sm-9">
                            <input
                              type="text"
                              class="form-control"
                              id="fname"
                              name="name"
                              placeholder="First Name Here"
                            />
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label
                            for="cono1"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Message</label
                          >
                          <div class="col-sm-9">
                            <textarea name="desc" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="border-top">
                        <div class="card-body">
                          <button type="submit" class="btn btn-primary">
                            Submit
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>

</div>


<x-footer>
</x-footer>