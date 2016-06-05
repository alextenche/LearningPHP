<?php
require_once("classes/recipe.php");
require_once("classes/render.php");
require_once("classes/RecipeCollection.php");
require_once("inc/recipes.php");

$cookbook = new RecipeCollection("Alena Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($beef_medallions);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);
// echo Render::listRecipes($cookbook->getRecipeTitles());
// echo Render::displayRecipe($belgian_waffles);

$breakfast = new RecipeCollection("favorite breakfasts");
foreach ($cookbook->filterByTag("breakfast") as $recipe) {
  $breakfast->addRecipe($recipe);
}

$weekMealPlan = new RecipeCollection("Meal Plan");
$weekMealPlan->addRecipe($cookbook->filterById(2));
$weekMealPlan->addRecipe($cookbook->filterById(3));
$weekMealPlan->addRecipe($cookbook->filterById(6));
$weekMealPlan->addRecipe($cookbook->filterById(16));


// echo Render::displayRecipe($cookbook->filterById(2));

echo Render::listRecipes($weekMealPlan->getRecipeTitles());
echo "\n\nShopping List\n\n";
echo Render::listShopping($weekMealPlan->getCombinedIngredients());

// echo Render::listRecipes($cookbook->getRecipeTitles());
