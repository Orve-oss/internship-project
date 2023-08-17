@extends('layouts.layout')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
        Transfert
      </h2>
      <!-- CTA -->
      <!-- General elements -->
      <h4
        class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
      >
        Informations pour le transfert
      </h4>
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Numéro du destinataire</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Entrez le numéro"
          />
        </label>

        <div class="mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Type du compte
          </span>
          <div class="mt-2">
            <label
              class="inline-flex items-center text-gray-600 dark:text-gray-400"
            >
              <input
                type="radio"
                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                name="accountType"
                value="personal"
              />
              <span class="ml-2">T-money</span>
            </label>
            <label
              class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400"
            >
              <input
                type="radio"
                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                name="accountType"
                value="busines"
              />
              <span class="ml-2">Flooz</span>
            </label>
          </div>
        </div>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Montant à transferer
          </span>
          <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Entrez le montant à transférer"
              />
          <!--<select
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
          >
            <option>$1,000</option>
            <option>$5,000</option>
            <option>$10,000</option>
            <option>$25,000</option>
          </select>-->
        </label>

        <!--<label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Multiselect
          </span>
          <select
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            multiple
          >
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </label>-->

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Message</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="3"
            placeholder="Entrez un texte"
          ></textarea>
        </label>

        <div class="flex mt-6 text-sm">
          <label class="flex items-center dark:text-gray-400">
            <input
              type="checkbox"
              class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            />
            <span class="ml-2">
              I agree to the
              <span class="underline">privacy policy</span>
            </span>
          </label>


        </div><br>
        <div>
            <button
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
          >Soumettre </button>
         </div>
        </div>

      <!-- Validation inputs
      <h4
        class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
      >
        Validation
      </h4>
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Invalid input
          </span>
          <input
            class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input"
            placeholder="Jane Doe"
          />
          <span class="text-xs text-red-600 dark:text-red-400">
            Your password is too short.
          </span>
        </label>


        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Valid input
          </span>
          <input
            class="block w-full mt-1 text-sm border-green-600 dark:text-gray-300 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
            placeholder="Jane Doe"
          />
          <span class="text-xs text-green-600 dark:text-green-400">
            Your password is strong.
          </span>
        </label>


        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">
            Helper text
          </span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
          <span class="text-xs text-gray-600 dark:text-gray-400">
            Your password must be at least 6 characters long.
          </span>
        </label>
      </div>-->

    </div>
  </main>
@endsection


