<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($show)
                    <div class="p-4">
                        <x-jet-secondary-button wire:click="index">{{ __('Back') }}</x-jet-secondary-button>
                    </div>
                @endif
                @if ($table)
                    <div class="flex justify-end p-4">
                        <x-jet-button wire:click="$set('addClient','true')">{{ __('Add client') }}</x-jet-button>
                    </div>
                @endif
                @if ($table)
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Name') }}</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Information') }}</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Status') }}</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Created') }}</th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">{{ __('Open') }}</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($clients as $client)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-8 w-8 rounded-full object-cover"
                                                                    src="https://ui-avatars.com/api/?name={{ $client->name }}&color=7F9CF5&background=random" />
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    {{ $client->name }}
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    {{ $client->email }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $client->company_name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $client->bussiness_name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $client->RFC }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        Cliente</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a wire:click="show({{ $client }})"
                                                            class="text-indigo-600 hover:text-indigo-900 cursor-pointer">{{ __('Open') }}</a>
                                                        <span
                                                            class="ml-2 text-red-600 hover:text-red-900 cursor-pointer"
                                                            wire:click="delete({{ $client }})">{{ __('Delete') }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="px-3 py-2">
                                        {{ $clients->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <x-jet-dialog-modal wire:model="addClient">
                    <x-slot name="title">{{ __('Add client') }}</x-slot>
                    <x-slot name="content">
                        <div class="space-y-4">
                            <div>
                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model="name" />
                                <x-jet-input-error for="name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model="email" />
                                <x-jet-input-error for="email" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                    wire:model="password" />
                                <x-jet-input-error for="password" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('Company name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text"
                                    wire:model="company_name" />
                                <x-jet-input-error for="company_name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('Bussiness name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text"
                                    wire:model="bussiness_name" />
                                <x-jet-input-error for="bussiness_name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('RFC') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model="RFC" />
                                <x-jet-input-error for="RFC" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('Legal representative name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text"
                                    wire:model="legal_representative_name" />
                                <x-jet-input-error for="legal_representative_name" />
                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="footer">
                        <x-jet-button wire:click="store">{{ __('Add') }}
                        </x-jet-button>
                    </x-slot>

                </x-jet-dialog-modal>

                @if ($show)
                    <div class="p-6 bg-gray-100">
                        <x-jet-form-section submit="update">
                            <x-slot name="title">
                                Información del cliente
                            </x-slot>

                            <x-slot name="description">
                                Podras modificar la informacion de los campos que se encuentren habilitados.
                            </x-slot>

                            <x-slot name="form">
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="Empresa" />
                                    <x-jet-input type="text" wire:model="editForm.company_name" class="w-full"
                                        placeholder="Nombre del cliente" />
                                    <x-jet-input-error for="editForm.company_name" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="Razón Social" />
                                    <x-jet-input type="text" wire:model="editForm.bussiness_name" class="w-full"
                                        placeholder="Razón Social" />
                                    <x-jet-input-error for="editForm.bussiness_name" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="RFC" />
                                    <x-jet-input type="text" wire:model="editForm.RFC" class="w-full"
                                        placeholder="RFC" />
                                    <x-jet-input-error for="editForm.RFC" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="Email" />
                                    <x-jet-input type="text" wire:model="editForm.email" disabled
                                        class="w-full bg-gray-100" placeholder="Email" />
                                    <x-jet-input-error for="editForm.email" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="Representante legal" />
                                    <x-jet-input type="text" wire:model="editForm.legal_representative_name"
                                        class="w-full" placeholder="Representante legal" />
                                    <x-jet-input-error for="editForm.legal_representative_name" />
                                </div>
                            </x-slot>

                            <x-slot name="actions" class="flex items-center">
                                <x-jet-action-message class="mr-3 text-green-500" on="updated">
                                    Cliente actualizado
                                </x-jet-action-message>
                                <x-jet-button>{{ __('Update') }}</x-jet-button>
                            </x-slot>
                        </x-jet-form-section>
                    </div>
                    {{-- <div class="p-6 bg-gray-100">
                        <div class="flex justify-end items-center mb-4">
                            <x-jet-danger-button wire:click="$set('addReference','true')">{{ __('Add reference') }}
                            </x-jet-danger-button>
                        </div>
                        <x-jet-action-section>
                            <x-slot name="title">
                                Lista de referencias
                            </x-slot>
                            <x-slot name="description">
                                Lista de referencias asignadas al cliente
                            </x-slot>
                            <x-slot name="content">
                                <table class="w-full divide-y divide-gray-200">
                                    <thead class="border-b border-gray-500">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Number') }}</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Description') }}</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Status') }}</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @foreach ($references as $reference)
                                            <tr>
                                                <td class="px-6 py-4">{{ $reference->reference }}
                                                </td>
                                                <td class="py-4">{{ $reference->description }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @switch($reference->status)
                                                        @case(1)
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                                                Pendiente </span>
                                                        @break
                                                        @case(2)
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                Pagada </span>
                                                        @break
                                                        @default

                                                    @endswitch
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span class=" text-indigo-600 hover:text-indigo-900 cursor-pointer"
                                                        wire:click="editReference({{ $reference }})">{{ __('Edit') }}</span>
                                                    <span class="ml-2 text-red-600 hover:text-red-900 cursor-pointer"
                                                        wire:click="deleteReference({{ $reference }})">{{ __('Delete') }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </x-slot>
                        </x-jet-action-section>
                    </div> --}}

                    {{-- Modal para crear referencias --}}
                    {{-- <x-jet-dialog-modal wire:model="addReference">
                        <x-slot name="title">{{ __('Add client') }}</x-slot>
                        <x-slot name="content">
                            <div class="space-y-4">
                                <div>
                                    <x-jet-label for="reference" value="{{ __('Reference') }}" />
                                    <x-jet-input id="reference" class="block mt-1 w-full" type="text"
                                        wire:model="reference" />
                                    <x-jet-input-error for="reference" />
                                </div>
                                <div>
                                    <x-jet-label for="amount" value="{{ __('Amount') }}" />
                                    <x-jet-input id="amount" class="block mt-1 w-full" type="number"
                                        wire:model="amount" />
                                    <x-jet-input-error for="amount" />
                                </div>
                                <div class="mt-4">
                                    <x-jet-label for="description" value="{{ __('Description') }}" />
                                    <x-jet-input id="description" class="block mt-1 w-full" type="text"
                                        wire:model="description" />
                                    <x-jet-input-error for="description" />
                                </div>
                                <div class="mt-4">
                                    <x-jet-label for="contract"
                                        value="{{ __('Contract') }} ({{ __('Optional') }})" />
                                    <x-jet-input id="contract" class="block mt-1 w-full" type="file"
                                        wire:model="contract" />
                                    <x-jet-input-error for="contract" />
                                </div>
                            </div>
                        </x-slot>
                        <x-slot name="footer">
                            <x-jet-button wire:click="storeReference">{{ __('Add') }}
                            </x-jet-button>
                        </x-slot>
                    </x-jet-dialog-modal> --}}

                    {{-- Modal para actualizar referencias --}}
                    {{-- <x-jet-dialog-modal wire:model="editReference.open">
                        <x-slot name="title">{{ __('Edit client') }}</x-slot>
                        <x-slot name="content">
                            <div class="space-y-4">
                                <div>
                                    <x-jet-label for="reference" value="{{ __('Reference') }}" />
                                    <x-jet-input id="reference" class="block mt-1 w-full" type="text"
                                        wire:model="editReference.reference" />
                                    <x-jet-input-error for="editReference.reference" />
                                </div>
                                <div>
                                    <x-jet-label for="amount" value="{{ __('Amount') }}" />
                                    <x-jet-input id="amount" class="block mt-1 w-full" type="number"
                                        wire:model="editReference.amount" />
                                    <x-jet-input-error for="editReference.amount" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="description" value="{{ __('Description') }}" />
                                    <x-jet-input id="description" class="block mt-1 w-full" type="text"
                                        wire:model="editReference.description" />
                                    <x-jet-input-error for="editReference.description" />
                                </div>
                                <div class="mt-4">
                                    @if ($editReference['contract'])
                                        <div class="flex items-center space-y-2 mb-4">
                                            <div>
                                                <i class="far fa-file-pdf text-3xl text-red-700"></i>
                                            </div>
                                            <div>
                                                <a href="{{ Storage::url($editReference['contract']) }}"
                                                    class="block text-lg ml-2 text-blue-600"
                                                    target="_blank">Contrato</a>
                                            </div>
                                        </div>
                                    @endif
                                    <x-jet-label for="contract"
                                        value="{{ __('Contract') }} ({{ __('Optional') }})" />
                                    <x-jet-input id="contract" class="block mt-1 w-full" type="file"
                                        wire:model="editContract" id="{{ $rand }}" />
                                    <x-jet-input-error for="editReferencecontract" />
                                </div>
                            </div>
                        </x-slot>
                        <x-slot name="footer">
                            <x-jet-button wire:click="updateReference">{{ __('Update') }}
                            </x-jet-button>
                        </x-slot>
                    </x-jet-dialog-modal> --}}
                @endif
            </div>
        </div>
    </div>
</div>
