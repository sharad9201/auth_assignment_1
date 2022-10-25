@extends('layout')
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    <div class="form-outline mb-4">
      <label class="form-label" for="">Email address</label>
      <input type="email" id="" class="form-control" />
    </div>
  
    <div class="form-outline mb-4">
      <label class="form-label" for="">Password</label>
      <input type="password" id="" class="form-control" />
    </div>
    <div class="row mb-4 ">
        <button type="submit" class="btn btn-primary btn-block row ">Sign in</button>
    
      </div>
    <div class="row mb-4">
      <div class="col d-flex justify-content-space-evenly">
        
        <div class="form-check ">
          <input class="form-check-input" type="checkbox" value="" id="" checked />
          <label class="form-check-label" for=""> Remember me </label>
          <div>
            <a href="#!">Forgot password?</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <p>Not a member? <a href="#!">Register</a></p>
    </div>
  </form>