
# Module configuration
module.tx_jkufolderselector_tools_jkufolderselectorfolderselectormodule {
  persistence {
    storagePid = {$module.tx_jkufolderselector_folderselectormodule.persistence.storagePid}
  }
  view {
    templateRootPaths.0 = EXT:jku_folderselector/Resources/Private/Backend/Templates/
    templateRootPaths.1 = {$module.tx_jkufolderselector_folderselectormodule.view.templateRootPath}
    partialRootPaths.0 = EXT:jku_folderselector/Resources/Private/Backend/Partials/
    partialRootPaths.1 = {$module.tx_jkufolderselector_folderselectormodule.view.partialRootPath}
    layoutRootPaths.0 = EXT:jku_folderselector/Resources/Private/Backend/Layouts/
    layoutRootPaths.1 = {$module.tx_jkufolderselector_folderselectormodule.view.layoutRootPath}
  }
}
