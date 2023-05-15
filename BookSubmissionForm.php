<!DOCTYPE html>
<html>
<head>
	<title>Book Submission Form</title>
</head>
<body>
<style>
        label{
           width:7rem;
            display:inline-block;
        }
    </style>

	<h2>Submit a Book</h2>
	<form name="bookForm" action="submit_book.php" method="post" onsubmit="return validateForm()">
		<label for="isbn">ISBN:</label>
		<input type="text" id="isbn" name="isbn" ><br><br>
		
		<label for="title">Title:</label>
		<input type="text" id="title" name="title" ><br><br>
		
		<label for="category">Category:</label>
		<input type="text" id="category" name="category" ><br><br>
		
		<label for="price">Price:</label>
		<input type="number" id="price" name="price" min="0" ><br><br>
		
		<label for="year">Year of Release:</label>
		<input type="number" id="year" name="year" min="0" ><br><br>
		
		<label for="rating">Rating:</label>
		<input type="number" id="rating" name="rating" min="0" max="10" ><br><br>
		
		<label for="publication_id">Publication ID:</label>
		<input type="text" id="publication_id" name="publication_id" ><br><br>
		
		<input type="submit" value="Submit">
	</form>
</body>

<script>
		function validateForm() {
			// get form input values
			var isbn = document.forms["bookForm"]["isbn"].value.trim();
			var title = document.forms["bookForm"]["title"].value.trim();
			var category = document.forms["bookForm"]["category"].value.trim();
			var price = document.forms["bookForm"]["price"].value;
			var year = document.forms["bookForm"]["year"].value;
			var rating = document.forms["bookForm"]["rating"].value;
			var publication_id = document.forms["bookForm"]["publication_id"].value.trim();

			// check if the required fields are not empty
			if (isbn == "" || title == "" || category == "" || price == "" || year == "" || rating == "" || publication_id == "") {
				alert("All fields are required.");
				return false;
			}

			// validate input values
			if (isNaN(price) || isNaN(year) || isNaN(rating) || isNaN(publication_id)) {
				alert("Invalid input values.");
				return false;
			}

			return true;
		}
</script>
</html>
