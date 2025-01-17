<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Maker</title>
    <!-- Adding external style sheets -->
    <link href="../styles/form.css" rel="stylesheet">
    <script src="../scripts/index.js" defer></script>
</head>
<body>
    <!-- Navigation Section -->
    <header>
        <a href="index.php">Home</a>
    </header>
    <h1>Nicks Pizza House</h1>
    <form id="buildPizza" action="confirmation.php" method="post">
        <!-- Fieldset for contact details -->
        <fieldset id="contactDetails">
            <legend>Contact Details</legend>
            <div class="form-group">
                <label for="firstName" class="sectionHeading">First Name:</label>
                <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <label for="lastName" class="sectionHeading">Last Name:</label>
                <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <label for="address1" class="sectionHeading">Address:</label>
                <input type="text" name="address1" id="address1" placeholder="Address" required>
            </div>
        </fieldset>

        <!-- Fieldset for quantity and pizza size -->
        <fieldset id="pizzaOptions">
            <legend>Pizza Options</legend>
            <div class="form-group">
                <label for="amountOfPizzas" class="sectionHeading">Quantity:</label>
                <input type="number" name="amountOfPizzas" id="amountOfPizzas" placeholder="Ex. 1" min="1" max="15" required>
            </div>
            <div class="form-group">
                <label for="pizzaSizes" class="sectionHeading">Pizza Size:</label>
                <select name="sizeOfPizza" id="pizzaSizes">
                    <option value="small">Small (6 slices)</option>
                    <option value="medium">Medium (8 slices)</option>
                    <option value="large">Large (12 slices)</option>
                </select>
            </div>
            <div class="form-group select">
                <label for="pizzaShape" class="sectionHeading">Shape of Pizza:</label>
                <label for="circlePizza">Circle</label>
                <input type="radio" name="pizzaShape" id="circlePizza" value="circle">
                <label for="squarePizza">Square</label>
                <input type="radio" name="pizzaShape" id="squarePizza" value="square">
            </div>
            <div class="form-group select">
                <label for="toppings" class="sectionHeading">Toppings:</label>
                <label for="pepperoni">Pepperoni</label>
                <input type="checkbox" name="toppings[]" id="pepperoni" value="pepperoni">
                <label for="mushrooms">Mushrooms</label>
                <input type="checkbox" name="toppings[]" id="mushrooms" value="mushrooms">
                <label for="pineapple">Pineapple</label>
                <input type="checkbox" name="toppings[]" id="pineapple" value="pineapple">
                <label for="bacon">Bacon</label>
                <input type="checkbox" name="toppings[]" id="bacon" value="bacon">
            </div>
            <div class="form-group">
                <label for="crustType" class="sectionHeading" >Crust Type:</label>
                <select name="crustType" id="crustType">
                    <option value="regular">Regular</option>
                    <option value="stuffed">Stuffed</option>
                </select>
            </div>
            <div class="form-group select">
                <label for="dineOption" class="sectionHeading">Dine Option:</label><br>
                <label for="takeOut">Take-out</label>
                <input type="radio" name="dineOption" id="takeOut" value="takeOut">
                <label for="delivery">Delivery</label>
                <input type="radio" name="dineOption" id="delivery" value="delivery">
            </div>
        </fieldset>

        <!-- Container for form submission and reset buttons -->
        <div id="buttons">
            <button type="reset">Clear Form</button>
            <button type="submit" id="submitButton">Continue</button>
        </div>
    </form>
    <p id="formStatus"></p>
    <p id="studentInfo"></p>
</body>
</html>
