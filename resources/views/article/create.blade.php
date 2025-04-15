@extends('layouts.app')

@section('title', 'Create Article')

@section('content')
    <div class="mt-20">
        {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            {{ html()->label('Name', 'name')->class('block text-sm/6 font-medium text-gray-900') }}
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    {{ html()->input('text', 'name')->class('block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6') }}
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                            {{ html()->label('Body', 'body')->class('block text-sm/6 font-medium text-gray-900') }}
                            <div class="mt-2">
                                {{ html()->textarea('body')->rows(8)->class('block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                {{ html()->submit('Create')->class('rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600') }}
            </div>
        {{ html()->closeModelForm() }}
    </div>
@endsection
