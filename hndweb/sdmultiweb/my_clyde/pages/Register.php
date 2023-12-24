<?php 
    include '../partials/header.php';
?>
<!-- component -->
<!-- Create by joker banny -->
<div class="h-screen bg-indigo-100 flex justify-center items-center pt-56">
	<div class="lg:w-2/5 md:w-1/2 w-2/3">
		<form class="bg-white p-10 rounded-lg shadow-lg min-w-full" method="post" action="config/register.php">
			<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Formregister</h1>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="student_num">student Number</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="tel" name="student_num" id="student_num" placeholder="student number" />
            </div>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="firstname">First name</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="firstname" id="firstname" placeholder="first name" />
            </div>
            <div>
			    <label class="text-gray-800 font-semibold block my-3 text-md" for="surname">surname</label>
			    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="surname" id="surname" placeholder="surname" />
            </div>
            <div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="email" name="email" id="email" placeholder="email" />
            </div>
            <div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="dob">date of birth</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="date" name="dob" id="dob" placeholder="dob" />
            </div>
            <div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="address">Address</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="address" id="address" placeholder="address" />
            </div>
            <div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="postcode">Postcode</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="postcode" id="postcode" placeholder="postcode" />
            </div>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="psw" id="password" placeholder="password" />
            </div>
						<button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
		</form>
	</div>
</div>
<?php
    include '../partials/footer.php';
?>