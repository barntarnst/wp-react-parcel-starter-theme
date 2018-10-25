import React from 'react'

export default class Page extends React.Component {
  constructor(props) {
    super(props)
  }
  componentDidMount() {}
  render() {
    const content = this.props.content
    return (
      <div className="regular-container">
        This is a page.
      </div>
    )
  }
}
