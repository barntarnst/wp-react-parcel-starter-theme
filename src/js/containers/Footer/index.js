import React from 'react'
import './styles.scss'

export default class Page extends React.Component {
  // ccspell:disable
  render() {
    return (
      <div className="footer-container">
        <div className="footer-flex">
          <div className="footer--social self-center">logo</div>
          <div className="footer--p">
            <h3>OM FTI</h3>
            <p>
              Förpacknings- och Tidningsinsamlingen är ett företag inom
              återvinningsbranschen som har till uppgift att se till att
              förpackningar och tidningar samlas in och återvinns. För att göra
              återvinning enkelt har vi ett insamlingssystem med över 5 000
              återvinningsstationer runt om i hela landet. Vi tar dessutom hand
              om det som lämnas för återvinning i miljörum. Materialvärlden är
              ett svenskt koncept som innehåller ett levande pedagogiskt
              material från FTI för familjer och förskolor. Målet med materialet
              är att få barn att vilja vara med och skapa en mer hållbar värld
              att växa upp och leva i.
            </p>
          </div>
          <div className="contact-container">
            <div>KONTAKTPERSON</div>
            <div>NYTTIGA LÄNKAR</div>
            <div>FTI logo</div>
          </div>
        </div>
      </div>
    )
  }
}
