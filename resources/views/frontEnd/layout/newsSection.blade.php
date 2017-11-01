  <section id="newsSection">
      <div class="row">
        <div class="col-lg-8 col-md-8">
        <div class="well well-lg">
          <form>
            
             <div class="form-row">
                <div class="form-group col-md-4">
                  
                  <input type="text" class="form-control" id="inputCity" placeholder="keyword">
                </div>
                <div class="form-group col-md-3">
                  
                  <select id="inputState" class="form-control">
                    <option>All Job Categories</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  
                  <select id="inputState" class="form-control">
                    <option>Locations</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-primary">Search</button></div>
                
              </div>   
      </form>
      </div>
    </div>
    <div class="col-lg-4 col-md-4">
        <form>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <p class="text-center">{!! session('message') !!}</p>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="btn-group pull-right">
              <a href="{{ URL::to('login/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            </div>
        </form>
      </div>
     </div>   
  </section>