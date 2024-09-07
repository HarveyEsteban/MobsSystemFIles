# MobsSystemFIles
Mobs System Files, All Changes Updates Should be stored in a Github Repo

----------------------------------------------------------------------------------
#How to run and Install tailwind CSS
note: This Webpage uses tailwind CSS framework for its Stylesheet
----------------------------------------------------------------------------------
Step 1 : "npm init -y" to start and initialize npm.
Step 2 : Configure tailwind css.
        "@tailwind base;
         @tailwind components;
         @tailwind utilities;" //put this in the Input.css

         "./src/pages/*.{php,html,js}" //put this in the tailwind.config [content].

         note: to get tailwindconfig.js run command - "npx tailwindcss init"

        -install tailwind using "npm install -D tailwindcss"
Step 3: Go to package.json and add this script:
                     "tailwind:css": "tailwindcss -i ./src/css/input.css -o ./src/css/output.css --watch"
Step 4: link the css file "output.css" to your file.
Step 5: run the script you added "npm run tailwind:css"
                                 note: tailwind:css is the name of the Script
----------------------------------------------------------------------------------