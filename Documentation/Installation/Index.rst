.. include:: /Includes.rst.txt

.. _installation:

============
Installation
============

Target group: **Administrators**

.. note::

   The extension supports TYPO3 v10 LTS and TYPO3 v11. At least PHP 7.4 is
   needed.


Some basic configuration is available which is explained in the
:ref:`Configuration <configuration>` section.


.. _installation-composer:

Installation via composer
=========================

#. Add a dependency ``brotkrueml/typo3-cookielist`` to your project's
   :file:`composer.json` file to install the current stable version:

   .. code-block:: shell

      composer req brotkrueml/typo3-cookielist

#. Activate the extension in the Extension Manager.


.. _installation-extension-manager:

Installation in Extension Manager
=================================

The extension needs to be installed as any other extension of TYPO3 CMS in
the Extension Manager:

#. Switch to the module :guilabel:`Admin Tools` > :guilabel:`Extensions`.

#. Get the extension

   #. **Get it from the Extension Manager:** Select the
      :guilabel:`Get Extensions` entry in the upper menu bar, search for the
      extension key ``cookielist`` and import the extension from the
      repository.

   #. **Get it from typo3.org:** You can always get the current version from
      `https://extensions.typo3.org/extension/cookielist/
      <https://extensions.typo3.org/extension/cookielist/>`_ by
      downloading the ``zip`` file. Upload the file afterwards in the Extension
      Manager.


.. _include-static-typoscript:

Preparation: Include static TypoScript
======================================

The extension ships some TypoScript code which needs to be included.

#. Switch to the root page of your site.

#. Switch to the :guilabel:`Template module` and select :guilabel:`Info/Modify`.

#. Press the link :guilabel:`Edit the whole template record` and switch to the
   tab :guilabel:`Includes`.

#. Select :guilabel:`Cookie List (cookielist)` from the available items
   at the field :guilabel:`Include static (from extensions):`

.. figure:: /Images/Installation/include-static-template.png
   :class: with-shadow
   :alt: Include static TypoScript
