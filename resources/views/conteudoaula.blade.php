
<div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    <button type="submit" class="config">{{ __('Atualizar dados') }}</button>
                </x-responsive-nav-link>

                <!-- Authentication -->
            </div>div

            <div class= "bg-purple-700 dark:bg-gray-900 " id="purp">
            @include('layouts.navigation')
            <!-- Page Heading -->
            </div>



            <a href="/login"> sair</a>


            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                              <button type="submit" class="bnt" > {{ __('Sair') }}</button>
                            </x-dropdown-link>






