
module.tx_jkufolderselector_folderselectormodule {
  view {
    # cat=module.tx_jkufolderselector_folderselectormodule/file; type=string; label=Path to template root (BE)
    templateRootPath = EXT:jku_folderselector/Resources/Private/Backend/Templates/
    # cat=module.tx_jkufolderselector_folderselectormodule/file; type=string; label=Path to template partials (BE)
    partialRootPath = EXT:jku_folderselector/Resources/Private/Backend/Partials/
    # cat=module.tx_jkufolderselector_folderselectormodule/file; type=string; label=Path to template layouts (BE)
    layoutRootPath = EXT:jku_folderselector/Resources/Private/Backend/Layouts/
  }
  persistence {
    # cat=module.tx_jkufolderselector_folderselectormodule//a; type=string; label=Default storage PID
    storagePid =
  }
}
