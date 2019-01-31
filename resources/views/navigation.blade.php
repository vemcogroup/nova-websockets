<h3 class="flex items-center font-normal text-white mb-6 text-base no-underline">
    <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path fill="var(--sidebar-icon)"
              d="M15 19a3 3 0 0 1-6 0H4a1 1 0 0 1 0-2h1v-6a7 7 0 0 1 4.02-6.34 3 3 0 0 1 5.96 0A7 7 0 0 1 19 11v6h1a1 1 0 0 1 0 2h-5zm-4 0a1 1 0 0 0 2 0h-2zm0-12.9A5 5 0 0 0 7 11v6h10v-6a5 5 0 0 0-4-4.9V5a1 1 0 0 0-2 0v1.1z"/>
    </svg>
    <span class="sidebar-label">
        Websockets
    </span>
</h3>

<ul class="list-reset mb-8">

    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
                name: 'index',
                params: {
                    resourceName: 'apps'
                }
            }" class="text-white ml-8 no-underline dim">
            Apps
        </router-link>
    </li>

    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{name: 'websockets'}" class="text-white ml-8 no-underline dim">
            Analytics / Debug
        </router-link>
    </li>

</ul>
