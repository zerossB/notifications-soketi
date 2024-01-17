<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" id='notifications'>

                </div>
            </div>
        </div>
    </div>

    <script defer>
        document.onreadystatechange = function() {
            if (document.readyState === 'complete') {
                var callback = function(e) {
                    console.log(e);
                    document.getElementById("notifications").innerHTML +=
                        `<p>${e.message}</p>`
                }
                Echo.private('notification.1')
                    .listen('RealTimeEvent', callback);

                Echo.private('notification.public')
                    .listen('RealTimeEvent', callback);
            }
        }
    </script>
</x-app-layout>
