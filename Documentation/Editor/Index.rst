.. include:: /Includes.rst.txt


.. _for-editors:

===========
For Editors
===========

Target group: **Editors**

.. contents:: Table of Contents
   :depth: 2
   :local:

.. _records:

Records
=======

The **cookie** records are categorised by a **type**. The type can be
"Functional cookies", "Analytics", "Performance", etc. Each cookie record can be
a **provider** assigned, this can be "Google", "Facebook", "LinkedIn" (for 3rd
party cookies) with a link to their privacy policy.

.. _records-types:

Types
-----

Create a new :guilabel:`Cookie List > Type` record in the storage folder:

.. figure:: /Images/Editor/record-type.png
   :class: with-shadow
   :alt: A type record

   A type record

Name (required)
   Enter the name of the type. It will be the heading for the assigned cookies.

Description
   The description is displayed as introduction for the type.


.. _records-providers:

Providers
---------

Create a new :guilabel:`Cookie List > Provider` record in the storage folder:

.. figure:: /Images/Editor/record-provider.png
   :class: with-shadow
   :alt: A provider record

   A provider record

Name (required)
   Enter the name of the provider.

Link to Privacy Policy
   The name will be linked if this field is filled.

Cookies
-------

Create a new :guilabel:`Cookie List > Cookie` record in the storage folder:

.. figure:: /Images/Editor/record-cookie.png
   :class: with-shadow
   :alt: A cookie record

   A cookie record

Type (required)
   Select a :ref:`type <records-types>` from the list.

Name (required)
   Enter the name of the cookie.

Purpose
   A short description for which purpose the cookie is used.

Provider
   Select a :ref:`provider <records-providers>` from the list.

Lifetime: Storage Time
   Enter the storage time of the cookie in this field. Enter ``0`` for a session
   cookie which is removed when closing the browser. If ``-1`` is entered, no
   information will be displayed for the lifetime (e.g. it is not stored as a
   cookie but in local storage).

Lifetime: Unit
   If you entered a number greater the 0 in the :guilabel:`Storage Time` field,
   select a unit (minutes, hours, days, months, years).


Plugin
======

To display the list of cookies on the web page add the plugin :guilabel:`Cookie
List` to the page:

.. figure:: /Images/Editor/plugin-wizard.png
   :class: with-shadow
   :alt: Plugin in new content element wizard

   Plugin in new content element wizard


