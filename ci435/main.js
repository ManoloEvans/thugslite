const recipeModule = ( () => {

    //PUBLIC NAMESPACING 
  
    const mainSelection = document.querySelector('select[id="main"]');
    const dietSelection = document.querySelector('select[id="diet"]');
    const healthSelection = document.querySelector('select[id="health"]');
    const timeSelection = document.querySelector('select[id="time"]');
    const resultContainer = document.querySelector('.result-container');
    const ingredients = document.querySelector('.ingredients'); 
    
    //PRIVATE NAMESPACING

    return  {
        //HANDLE SUBMIT FUNCTION
        handleSubmit: function(e) {
            e.preventDefault();
            //Get values from all selects
            const mainValue = mainSelection.value;
            const dietValue = dietSelection.value;
            const healthValue = healthSelection.value;
            //call 
            this.handleFetch(mainValue, dietValue, healthValue);
        },
  
        //FETCH ASYNC FUNCTION
            // 1. validte the response.
            // - if hits > 0, then process, otherwise, display message no hits
        handleFetch: async function(mainValue, dietValue, healthValue) {
            const dataRequest = await fetch(`https://api.edamam.com/search?q=${mainValue}&app_id=08ab47ee&app_key=fa5814a32eb2669676885dff6d983c44&health=${healthValue}&diet=${dietValue}&to=30`);
            const dataResponse = await dataRequest.json()
            console.log(dataResponse);
            const dataResults =  dataResponse.hits; 
            
            this.render(dataResults);
        },
     
    
        //LOOP THROUGH RESULTS
        render: function(data) {
            const html = data.map((item) => {
                return this.renderResult(item);  
            }).join('');
            //
            resultContainer.innerHTML = html;
        },
    
        // return a <li> item
        renderResult: function(data) {
            //Title 
            const title = data.recipe.label;
            
            //Image
            const image = data.recipe.image;

            // Calories 
            const calories = data.recipe.calories;
            //Ingredients

            const ingred = data.recipe.ingredientLines.map(ingredient => {
            return `<li class="ingredient">${ingredient}</li>`;
            }).join('');


            return ` 
                <div class="pill">
                <p class="title">${title}</p>
                <img src="${image}" alt="Recipe Image">
                <ol>
                ${ingred}
                </ol>
                </div>
                `
            }
        }
  
  })();
  
const submitButton = document.querySelector('input[type="button"]');
submitButton.addEventListener('click',recipeModule.handleSubmit.bind(recipeModule));