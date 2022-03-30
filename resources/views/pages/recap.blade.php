<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shipp-group Pour vos livraisons</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/dashboard/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/dashboard/js/init-alpine.js"></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
 
      <div class="flex flex-col flex-1 w-full">
        
        <main class="h-full overflow-y-auto mb-8">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl  text-gray-700 dark:text-gray-200"
            >
              Recapitulatif de la commande
            </h2>
            
            
            

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs  tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Type colis</th>
                      <th class="px-4 py-3">Poids</th>
                      <th class="px-4 py-3">Nombre</th>
                      <th class="px-4 py-3">Moyen de transport</th>
                      <th class="px-4 py-3">Statuts</th>
                      <th class="px-4 py-3">Prix</th>
                      <th class="px-4 py-3">Date</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">                          
                          <div>
                            <p class="">Nourriture</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">                          
                          <div>
                            <p class="">10kg</p>
                            
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">                          
                          <div>
                            <p class="">25</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        Moto
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1  leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Livrée
                        </span>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        2500Fcfa
                      </td>
                      <td class="px-4 py-3 text-sm">
                        24/04/2022
                      </td>
                    </tr> 
                  
                  </tbody>
                </table>
              </div>
              
          </div>
          
        </main>
      </div>
    </div>
  </body>
</html>
