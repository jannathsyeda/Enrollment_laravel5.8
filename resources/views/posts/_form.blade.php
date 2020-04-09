
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" value="{{ old('name',$post->name ?? null) }}">
    </div>
    <div class="form-group">
      <label for="contact">Contact</label>
      <input type="text" name="contact" class="form-control" id="contact" placeholder="contact" value="{{ old('contact',$post->contact ?? null) }}">
    </div>
    <div class="form-group">
        <label for="cgpa">Cgpa</label>
        <input type="text" name="cgpa" class="form-control" id="cgpa" placeholder="cgpa" value="{{ old('cgpa',$post->cgpa ?? null) }}">
    </div>
    

    