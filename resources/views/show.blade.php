<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
     <form action="/show" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="enter your name" />
        <br><br>
        <input type="text" name="email" placeholder="enter your email" />
        <br><br>
        <input type="number" name="phone" placeholder="enter your phone number" />
        <br><br>
        <input type="file" name="file" value="file" palceholder="choose your image" />
        <br><br>
        <input type="password" name="password" placeholder="enter your password" />
        <br><br>
        <input type="text" name="father" placeholder="enter your father name" />
        <br><br>
        <input type="text" name="mother" placeholder="enter your mother name"/>
        <br><br>
        <button>Submit</button>
     </form>
</div>
