.. include:: /Includes.rst.txt

.. _configuration:

=============
Configuration
=============

Target group: **Developers, Integrators**

.. _constant-editor:

Constant Editor
===============

Some constants can be defined in the
:ref:`Constant Editor <t3tsref:typoscript-syntax-constant-editor>`.

Select the category :guilabel:`PLUGIN.TX_COOKIELIST_LIST` and make your
adjustments.

.. figure:: /Images/Configuration/constant-editor.png
   :class: with-shadow
   :alt: Constant Editor

   Constant Editor


Files
-----

If you want to change the template of the plugin make a copy of it and adjust
the template path.

Path to template root (FE)
~~~~~~~~~~~~~~~~~~~~~~~~~~

Enter the additional template root path, e.g.
:file:`EXT:your_sitepackage/Resources/Private/Templates/Cookielist/`.

Alternatively you can change the setting directly in the TypoScript setup:

::

   plugin.tx_cookielist_list.view.templateRootPaths {
      10 = EXT:your_sitepackage/Resources/Private/Templates/Cookielist/
   }


Default storage PID
~~~~~~~~~~~~~~~~~~~

In order to display the list of cookies correctly you have to define the storage
folder in which the records are stored. Enter here the page id.

Alternatively you can change the setting directly in the TypoScript setup:

::

   plugin.tx_cookielist_list.persistence.storagePid = 42
