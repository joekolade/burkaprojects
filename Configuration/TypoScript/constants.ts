
plugin.tx_burkaprojects_projektlist {
  view {
    # cat=plugin.tx_burkaprojects_projektlist/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:burkaprojects/Resources/Private/Templates/
    # cat=plugin.tx_burkaprojects_projektlist/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:burkaprojects/Resources/Private/Partials/
    # cat=plugin.tx_burkaprojects_projektlist/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:burkaprojects/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_burkaprojects_projektlist//a; type=string; label=Default storage PID
    storagePid =
  }
}
