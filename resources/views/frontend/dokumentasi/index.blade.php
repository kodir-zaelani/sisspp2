@extends('layouts.appf')

@section('title', 'Home')
@section('content')

<div class="flex-shrink-0 p-3" style="width: 280px">
        <a
          href="/"
          class="pb-3 mb-3 d-flex align-items-center link-body-emphasis text-decoration-none border-bottom"
        >
          <svg
            class="bi pe-none me-2"
            width="30"
            height="24"
            aria-hidden="true"
          >
            <use xlink:href="#bootstrap"></use>
          </svg>
          <span class="fs-5 fw-semibold">Collapsible</span>
        </a>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button
              class="border-0 rounded btn btn-toggle d-inline-flex align-items-center collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#home-collapse"
              aria-expanded="true"
            >
              Home
            </button>
            <div class="collapse show" id="home-collapse">
              <ul class="pb-1 btn-toggle-nav list-unstyled fw-normal small">
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Overview</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Updates</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Reports</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button
              class="border-0 rounded btn btn-toggle d-inline-flex align-items-center collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#dashboard-collapse"
              aria-expanded="false"
            >
              Dashboard
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="pb-1 btn-toggle-nav list-unstyled fw-normal small">
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Overview</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Weekly</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Monthly</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Annually</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button
              class="border-0 rounded btn btn-toggle d-inline-flex align-items-center collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#orders-collapse"
              aria-expanded="false"
            >
              Orders
            </button>
            <div class="collapse" id="orders-collapse">
              <ul class="pb-1 btn-toggle-nav list-unstyled fw-normal small">
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >New</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Processed</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Shipped</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Returned</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li class="my-3 border-top"></li>
          <li class="mb-1">
            <button
              class="border-0 rounded btn btn-toggle d-inline-flex align-items-center collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#account-collapse"
              aria-expanded="false"
            >
              Account
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="pb-1 btn-toggle-nav list-unstyled fw-normal small">
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >New...</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Profile</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Settings</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="rounded link-body-emphasis d-inline-flex text-decoration-none"
                    >Sign out</a
                  >
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>

@endsection
