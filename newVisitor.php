<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
     <form action="functions/visitors.php" method="post" class="w-25 rounded container-md position-absolute top-50 start-50 translate-middle border border-success p-2 mb-2 border-opacity-25 row">
        <div class="mb-4">
            <h3 class="fw-bold text-center">Add New Visitor</h3>
        </div>
        <div data-mdb-input-init class="form-outline mb-4 col-4">
            <label class="form-label" for="first_name">First Name</label>
            <input type="text" id="first_name" name="visitor[first_name]" class="form-control" />
        </div> 

        <div data-mdb-input-init class="form-outline mb-4 col-4">
            <label class="form-label" for="middle_name">Middle Name</label>
            <input type="text" id="middle_name" name="visitor[middle_name]" class="form-control" />
        </div> 

        <div data-mdb-input-init class="form-outline mb-4 col-4">
            <label class="form-label" for="last_name">Last Name</label>
            <input type="text" id="last_name" name="visitor[last_name]" class="form-control" />
        </div> 
        

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="contact">Contact</label>
            <input type="text" id="contact" name="visitor[contact]" class="form-control" />
        </div> 

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="address">Address</label>
            
             <div class="input-group">
                <input type="text" id="address" name="visitor[address]" class="form-control" />
                <select class="form-select" name="visitor[location_type]" aria-label="Default select example" style="max-width: 100px;">
                    <option disabled selected>Select</option>
                    <option value="School">School</option>
                    <option value="Office">Office</option>
                </select>
            </div>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="Purpose">Purpose</label>
            <select class="form-select" name="visitor[purpose]" aria-label="Default select example">
                <option disabled selected>Select</option>
                <option value="Attendance">Attendance</option>
                <option value="Exam">Exam</option>
                <option value="Inquiry">Inquiry</option>
                <option value="Others">Others</option>
            </select>
        </div>


        <!-- Submit button-->
        
        <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary w-100">Add</button>

    </form>

    
    <script src="js/bootstrap.js"></script>
</body>
</html>